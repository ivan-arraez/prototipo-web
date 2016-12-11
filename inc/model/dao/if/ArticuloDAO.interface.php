<?php
interface iArticuloDAO {
	public function findArticuloById($id);
	public function findComentariosByIdArticulo($idArticulo);
}
?>