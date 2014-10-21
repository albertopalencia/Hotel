<?php

/**
 * ProductosModel short summary.
 *
 * ProductosModel description.
 *
 * @version 1.0
 * @author AlbertoPalencia
 */
class productosmodel
{
   
 
    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
 
    public function listadoProductos()
    {
        try{
                $data[] = null;

                $sql = " SELECT  * FROM productos ";
                $query = $this->db->prepare($sql);
                $query->execute();
               

               while ($row = $result->fetch()) {
                    $data[] = array(
                        'Id' => $row['IdProductos'],
                        'Nombre' =>$row['nombres']                                           
                    );
                }
       
            }
        catch(PDOException $e){
                echo "ERROR: " . $e->getMessage();
            }
        return $data;
    }
}
