<?php

namespace App\Controller\Admin;

use App\Entity\Animaux;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AnimauxCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animaux::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
