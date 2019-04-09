<?php

namespace App\Form;

use App\Entity\Turma;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TurmaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', null, [
                'label' => 'Nome:',
            ])
            ->add('etapa', null, [
                'label' => 'Etapa:',
            ])
            ->add('numeroEtapa', null, [
                'label' => 'Numero da Etapa:',
            ])
            ->add('catequista', null, [
                'label' => 'Catequistas:',
            ])
            ->add('escola', null, [
                'label' => 'Escola:',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Turma::class,
        ]);
    }
}
