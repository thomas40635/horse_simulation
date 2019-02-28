<?php
namespace Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;

class CustomAdmin extends AbstractAdmin
{
    /**
     * @param $action
     * @param null $object
     */
    public function checkAccess($action, $object = null)
    {
        /*
         * Récupère un tableau avec la liste des accès disponibles
         */
        $access = $this->getAccess();

        /*
         * $action est un string correspondant à l'action demandée (deit, delete...)
         * On vérifie donc que l'action demandée fait bien partie des actions listées dans le tableau des accès
         */
        if (!array_key_exists($action, $access)) {
            throw new \InvalidArgumentException(sprintf(
                'Action "%s" could not be found in access mapping.'
                .' Please make sure your action is defined into your admin class accessMapping property.',
                $action
            ));
        }

        /*
         * TODO
         * On vérifie que l'utilisateur à le droit d'accéder à la page (edit par exemple)
         */

        if($action === 'edit'){
            throw new \Symfony\Component\Security\Core\Exception\AccessDeniedException('Accès non autorisé');
        }
    }

    public function getAccess()
    {
        return $access = array(
            'edit' => 'EDIT',
            'show' => 'VIEW',
            'create' => 'CREATE',
            'delete' => 'DELETE',
            'list' => 'LIST',
        );
    }
}