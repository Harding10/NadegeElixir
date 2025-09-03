<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{

    use HasFactory;

    /**
     * Définition de la relation entre un article et son auteur
     * Un article "appartient" à un utilisateur (Many-to-One : plusieurs articles peuvent avoir le même auteur).
     */
    public function author()
    {
        // belongsTo = relation inverse de hasMany (chaque article appartient à un seul utilisateur).
        // 'author_id' est la clé étrangère dans la table articles
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Définition de la relation entre un article et sa catégorie
     * Un article "appartient" à une seule catégorie.
     */
    public function category()
    { 
        // Relation Many-to-One : plusieurs articles appartiennent à une seule catégorie
        return $this->belongsTo(Category::class); 
    }

    /**
     * $fillable : liste des colonnes qui peuvent être "remplies en masse" (Mass Assignment)
     * Exemple : Article::create([...]) ne fonctionnera que pour ces champs.
     */
    protected $fillable = ['title', 'description', 'category_id', 'author_id', 'image', 'price'];

    /**
     * $guarded : liste des colonnes protégées (non modifiables via Mass Assignment).
     * Ici 'id' est protégé → on ne peut pas forcer la valeur de l'id lors de l'insertion.
     */
    protected $guarded = ['id'];
}
