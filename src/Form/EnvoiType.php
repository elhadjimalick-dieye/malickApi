<?php

namespace App\Form;

use App\Entity\Envoi;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnvoiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('montant')
            ->add('NomRecepteur')
            ->add('PrenomRecepteur')
            ->add('NumeroRecepteur')
            ->add('numeroTransaction')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Envoi::class,
        ]);
    }
}
