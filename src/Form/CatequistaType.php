<?php

namespace App\Form;

use App\Entity\Catequista;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CatequistaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', null, [
                'label' => 'Nome:',
            ])
            ->add('idade', null, [
                'label' => 'Idade:',
            ])
            ->add('endereco', null, [
                'label' => 'Endereço:',
            ])
            ->add('cidade', null, [
                'label' => 'Cidade:',
            ])
            ->add('sexo', null, [
                'label' => 'Sexo:',
            ])
            ->add('dataNascimento', BirthdayType::class, [
                'label' => 'Data de nascimento:',

            ])
            ->add('telefone', TelType::class, [
                'label' => 'Telefone:',
            ])
            ->add('email', null, [
                'label' => 'E-mail:',
            ])
            ->add('usuario', null, [
                'label' => 'Usuario:',
            ])
            ->add('senha', PasswordType::class, [
                'label' => 'Senha:',
            ])
            ->add('roles', ChoiceType::class,[
                'label' => 'Permissões:',
                'multiple' => true,
                'choices' => [
                    'Administrador' => 'ROLE_ADMIN',
                    'Coordenador' => 'ROLE_COORDENADOR',
                    'Catequista' => 'ROLE_CATEQUISTA',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Catequista::class,
        ]);
    }
}
