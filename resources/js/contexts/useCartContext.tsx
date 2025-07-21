import { createContext, Dispatch, PropsWithChildren, SetStateAction, useContext, useEffect, useState } from 'react';
import { useData } from '../hooks/useParseSsrData';

export type TIME_STAMP_COLUMNS = {
    created_at: Date;
    updated_at: Date;
};

export type BrandType = {
    id: number;
    name: string;
} & TIME_STAMP_COLUMNS;

export type ProductType = {
    id: number;
    name: string;
    price: string;
    image: string;
    code: string;
    brand_id: number;
    inventory_qty: number;
} & TIME_STAMP_COLUMNS;

export type ICardCtx =
    | {
        brands: BrandType[];
        products: ProductType[];
        cart: ProductType[];
        activeBrand: number;
        setActiveBrand: Dispatch<SetStateAction<number>>;
    }
    | undefined;

export const CartCtx = createContext<ICardCtx>({
    brands: [],
    cart: [],
    products: [],
    activeBrand: 0,
    setActiveBrand: () => 0,
});

export const CartCtxProvider: React.FC<PropsWithChildren> = props => {
    const data = useData();
    const [products, setProducts] = useState<ProductType[]>([]);
    const [cart, setCart] = useState<ProductType[]>([]);
    const [brands, setBrand] = useState<BrandType[]>([]);
    const [activeBrand, setActiveBrand] = useState<number>(0);
    useEffect(() => {
        setProducts(data.productsInInventory);
        setBrand(data.brandsInInventory);
    }, [data]);


    useEffect(() => {
        console.log(activeBrand);
        
    },[activeBrand])

    return (
        <CartCtx.Provider
            value={{
                brands,
                cart,
                products,
                activeBrand,
                setActiveBrand,
            }}
        >
            {props.children}
        </CartCtx.Provider>
    );
};

export const useCartCtx = function () {
    const ctx = useContext(CartCtx);
    if (!ctx) throw new Error(`CartCtx can be used in CartCtxProvider`);
    return ctx;
};
