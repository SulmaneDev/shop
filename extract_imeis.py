import re
import os
import sys
import json
from PIL import Image
from pyzbar.pyzbar import decode
import pytesseract
from shutil import which


if not which("tesseract"):
    
    custom_tesseract = os.path.expanduser(r"~\AppData\Local\Programs\Tesseract-OCR\tesseract.exe")
    if os.path.exists(custom_tesseract):
        pytesseract.pytesseract.tesseract_cmd = custom_tesseract
    else:
        print(json.dumps({"error": "Tesseract not found"}))
        sys.exit(1)


def extract_imeis_from_text(text):
    """Extract all 15-digit IMEIs from any text."""
    return re.findall(r'\b\d{15}\b', text)


def extract_imeis_from_qr(image_path):
    """Extract IMEIs from QR code data in image."""
    imeis = []
    try:
        image = Image.open(image_path)
        for obj in decode(image):
            data = obj.data.decode('utf-8')
            imeis.extend(extract_imeis_from_text(data))
    except Exception as e:
        pass  
    return imeis


def extract_imeis_with_ocr(image_path):
    """Extract visible IMEIs from image using OCR."""
    try:
        image = Image.open(image_path)
        text = pytesseract.image_to_string(image)
        return extract_imeis_from_text(text)
    except Exception as e:
        return []


def extract_imeis_from_file(file_path):
    """Extract IMEIs from any file: text, QR image, or image with visible text."""
    if not os.path.exists(file_path):
        return {"error": "File does not exist"}

    ext = file_path.lower()
    imeis = []

    try:
        if ext.endswith(('.txt', '.log')):
            with open(file_path, 'r', encoding='utf-8') as f:
                imeis = extract_imeis_from_text(f.read())

        elif ext.endswith(('.png', '.jpg', '.jpeg')):
            imeis = extract_imeis_from_qr(file_path)
            if not imeis:
                imeis = extract_imeis_with_ocr(file_path)
        else:
            return {"error": "Unsupported file type"}
    except Exception as e:
        return {"error": str(e)}

    return imeis or {"imeis": []}



if __name__ == "__main__":
    if len(sys.argv) != 2:
        print(json.dumps({"error": "Missing file path argument"}))
        sys.exit(1)

    path = sys.argv[1]
    result = extract_imeis_from_file(path)
    print(json.dumps(result))
