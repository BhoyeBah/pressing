<?php

// src/Form/DemandePressingType.php

namespace App\Form;

use App\Entity\DemandePressing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Pressing;
use App\Entity\Membre;

class DemandePressingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pressing', PressingType::class, [
                'label' => 'Informations du Pressing',
            ])
            ->add('membre', MembreType::class, [
                'label' => 'Informations du Responsable',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandePressing::class,
        ]);
    }
}
