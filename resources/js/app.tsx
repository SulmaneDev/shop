import './bootstrap';
import PosFooter from './components/pos-footer';
import PosProduct from './components/pos-product';
import { CartCtxProvider } from './contexts/useCartContext';

export function App() {
    return (
        <CartCtxProvider>
            <div className="row pos-wrapper">
                <PosProduct />
            </div>
            <PosFooter />
        </CartCtxProvider>
    );
}
