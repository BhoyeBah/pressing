<?php

namespace App\Form;

use App\Entity\Articles;
use App\Entity\Commande;
use App\Entity\CommandeDetail;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeDetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantity')
            ->add('prixUnitaire')
            ->add('prixTotal')
            ->add('articles', EntityType::class, [
                'class' => Articles::class,
                'choice_label' => 'id',
            ])
            ->add('commande', EntityType::class, [
                'class' => Commande::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CommandeDetail::class,
        ]);
    }
}
