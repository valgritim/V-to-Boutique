<?php

require 'admin/database.php';
/**
 * Définis l'objet produit
 * produits proposés dans mon magasin Véto Boutique
 * attr (string) $_id
 * attr (string) $_description
 * attr (string) $_img
 * attr (string) $_prix
 * attr (int) $_stock
 * attr (string) $_categorie
 */
class Produit
{
	//attributs
	private $_id, $_produit, $_description, $_image, $_prix, $_stock, $_categorie;

	//constructeur
	function __construct($produit, $desc, $img, $prix,$stock,$categorie)
	{
		# code...
		$this->_id = $id;
		$this->_produit = $produit;
		$this->_description = $desc;
		$this->_image = $img;
		$this->_prix = $prix;
		$this->_stock = $stock;
		$this->_categorie = $categorie;
	}

	// accesseur
	public function __get($attr){
		return $this->$attr;
	}

	// mutateur
	public function __set($val, $attr){
		$this->$attr = $val;
	}

	//fonction getUsers
	// permet de récupérer la liste de tous les produits dans la base ! C'est une méthode de classe d'où le static
	static function getAll(){
		$db = Database::connect();
		$sql = "SELECT * FROM `produits`";
		$statement = $db->query($sql);
		// $return = $statement->fetchAll();

		while($item = $statement->fetch()){
                    
                    echo '<tr>';
                        echo '<td>' . $item['nom_produit']. '</td>';
                        echo '<td>' . $item['categorie']. '</td>';
                        echo '<td>' . $item['descr_produit']. '</td>';
                        echo '<td>' . number_format((float)$item['prix'],2, '.', '') . '</td>';
                        echo '<td>' . $item['stock']. '</td>';
                        echo '<td width=300>';
                        echo '<a class="btn btn-default" href="view.php?id=' .$item['id'] . '"><i class="far fa-eye"></i> Voir</a>';
                        echo ' ';
                        echo '<a class="btn btn-primary" href="update.php?id=' . $item['id'] . '"><i class="fas fa-pencil-alt"></i> Modifier</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="delete.php?id=' . $item['id'] . '"><i class="fas fa-trash-alt"></i> Supprimer</a>';
                        echo '</td>';
                        echo '</tr>';




		Database::disconnect();
		return $item;
	}

	public function getProduitByCategory($categorie){
		$db = Database::connect();
		$sql = "SELECT * FROM `produits` WHERE `categorie` = '$categorie'";
		$statement = $db->query($sql);
		while($item = $statement->fetch()){
                    echo '<div class="col-sm-8 col-md-4 mb-5">
                                <div class="card pt-3" style="width: 18rem; height:33rem;">
                                    <img class="card-img-top pb-2 border-bottom" style="height:15rem;" src="images/' . $item['image'] . '" alt="..."/>
                                  <div class="card-body">
                                  	<h5 class="card-title" style="color:black;">' . $item['nom_produit'] .'</h5>
                                 	<p class="card-text" style="color:black;">' . $item['descr_produit'] .'</p>
                                    <p class="card-text" style="color:black;">' . $item['prix'] . ' €</p>
                                    <p class="card-text" style="color:black;"><strong>Quantité en stock: </strong>' . $item['stock'] . ' </p>
                                    <a href="#" class="btn btn-order bg-success" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                   </div>
                                </div>
                           </div>';
                    
                    }

		Database::disconnect();
		return $item;
	}

	public function createProduit(){


	}

	public function updateProduit(){


	}

	public function deleteProduit(){


	}

}
