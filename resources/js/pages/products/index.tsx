import { Head } from "@inertiajs/react";
type Product = 
    {
        ID: number;
        Nombre: string;
        Precio: number;
    }
;

export default function ProductIndex({ products }: { products: Product[] }) {
    return (
        <>
            <Head title="Productos"/>
            <div className="p-4">
                <h1 className="mb-4 text-2xl font-bold">Productos</h1>
                <div className="flex flex-col gap-3">
                    {products.map((product)=>(
                        <div key={product.ID} className="border p-3">
                            <h3 className="text-xl font-semibold">{product.Nombre}</h3>
                            <p>{product.Precio}</p>
                        </div>
                    ))}
                </div>
            </div>
        </>
    );
}
