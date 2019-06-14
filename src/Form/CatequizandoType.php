<?php

namespace App\Form;

use App\Entity\Catequizando;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CatequizandoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', null,[
                'label' => 'Nome:',
            ])
            ->add('sexo', null,[
                'label' => 'Sexo:',
            ])
            ->add('dataNascimento', BirthdayType::class,[
                'label' => 'Data de nascimento:',
                'format' => 'dd MM yyyy'
            ])
            ->add('naturalidade', null,[
                'label' => 'Naturalidade do catequizando:',
            ])
            ->add('endereco', null,[
                'label' => 'Endereço do catequizando:',
            ])
            ->add('cidadeCatequizando', null, [
                'label' => 'Cidade do catequizando:',
            ])
            ->add('telefone', TelType::class,[
                'label' => 'Telefone:',
                'required' => false,
            ])
            ->add('documento', FileType::class,[
                'label' => 'Documento identificador:',
                'required' => false,
                'data_class' => null

            ])
            ->add('batizado', null,[
                'label' => 'Batizado',
            ])
            ->add('comprovanteBatizado', FileType::class,[
                'label' => 'Comprovante de batismo:',
                'required' => false,
                'data_class' => null

            ])
            ->add('eucaristia', null,[
                'label' => 'Eucaristia',
            ])
            ->add('comprovanteEucaristia', FileType::class,[
                'label' => 'Comprovante de eucaristia:',
                'required' => false,
                'data_class' => null

            ])
            ->add('nomePai', null,[
                'label' => 'Nome do pai:',
            ])
            ->add('nomeMae', null,[
                'label' => 'Nome da mãe:',
            ])
            ->add('casado', null,[
                'label' => 'Pais casados na igreja',
            ])
            ->add('comprovanteCasamento', FileType::class,[
                'label' => 'Comprovante de casamento dos pais:',
                'required' => false,
                'data_class' => null

            ])
            ->add('telefonePai', null, [
                'label' => 'Telefone do pai:',
                'required' => false,

            ])
            ->add('telefoneMae', null,[
                'label' => 'Telefone da mãe:',
                'required' => false,

            ])
            ->add('turma', null,[
                'placeholder' => 'Selecione a turma',
                'label' => 'Turma',
            ])
            ->add('nomePadrinhoCrisma', null, [
                'label' => 'Nome do padrinho de Crisma:',
            ])
            ->add('telPadrinho', null, [
                'label' => 'Telefone do padrinho:',
                'required' => false,
            ])
            ->add('enderecoPadrinho', null, [
                'label' => 'Endereço do padrinho:',
            ])
            ->add('cidadePadrinho', null, [
                'label' => 'Cidade do Padrinho:',
            ])
            ->add('pendencias', ChoiceType::class,[
                'multiple' => true,
                'label' => 'Pendências:',
                'attr' => [
                    'class' => 'selectpicker'
                ],
                'choices' => [
                    'Comprovante de Eucaristia' => 'Comprovante de Eucaristia',
                    'Comprovante de Batismo' => 'Comprovante de Batismo',
                    'Taxa da inscrição' => 'Taxa da inscrição',
                    'Taxa do retiro' => 'Taxa do retiro',
                    'Taxa do livro' => 'Taxa do livro',
                    'Documento identificador' => 'Documento identificador',
                    'Endereço' => 'Endereço',
                    'Nenhuma' => 'Nenhuma'

                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Catequizando::class,
        ]);
    }
}
