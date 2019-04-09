<?php

namespace App\Form;

use App\Entity\Escola;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EscolaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', null,[
              'label' => 'Nome:'
            ])
            ->add('endereco', null, [
                'label' => 'Endereço:'
            ])
            ->add('cidade', null, [
                'label' => 'Cidade:'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Escola::class,
        ]);
    }
}
