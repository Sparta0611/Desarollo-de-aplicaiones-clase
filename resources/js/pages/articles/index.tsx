import { Head } from "@inertiajs/react";

type Article = {
    id: number;
    title: string;
    content: string;
};
export default function ArticleIndex({ articles }: { articles: Article[] }) {
    return (
        <>
            <Head title="Articulos"/>
            <div className="p-4">
                <h1 className="mb-4 text-2xl font-bold">Articulos</h1>
                <div className="flex flex-col gap-3">
                    {articles.map((article)=>(
                        <div key={article.id} className="border p-3">
                            <h3 className="text-xl font-semibold">{article.title}</h3>
                            <p>{article.content}</p>    
                        </div>
                    ))}
                </div>
            </div>
        </>
    );
}
