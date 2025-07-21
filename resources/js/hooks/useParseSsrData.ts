import { useEffect, useState } from "react";
import { BrandType, ProductType } from "../contexts/useCartContext";

export type SsrDataType = {
    productsInInventory: ProductType[];
    brandsInInventory: BrandType[];
};

export function useData() {
    const [data, setData] = useState<SsrDataType>({
        brandsInInventory: [],
        productsInInventory: [],
    });

    useEffect(() => {
        const ssrEl = document.getElementById("ssr");
        if (!ssrEl || !ssrEl.dataset.ssr) return;
        const raw = ssrEl.dataset.ssr;
        try {
            console.log(raw);

            const parsed = JSON.parse(raw) as SsrDataType;
            setData(parsed);
        } catch (error) {
            console.error("Error parsing SSR data from #ssr dataset.ssr", error);
        }
    }, []);

    return data;
}
