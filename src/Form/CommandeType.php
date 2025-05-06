<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Commande;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateLivraison', null, [
                'widget' => 'single_text',
            ])
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choices' => $options['clients'], // Utilisez les clients passés en option
                'choice_label' => function (Client $client) {
                    return $client->getNom() . ' ' . $client->getPrenom() . ' (' . $client->getTelephone() . ')';
                },
                'placeholder' => 'Choisissez un client',
                'required' => true, // Ajustez en fonction de vos besoins
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
            'clients' => [],
        ]);
    }
}
