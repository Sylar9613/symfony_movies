<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Genre;
use App\Entity\Movie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $textInputCss = 'block rounded-lg border-slate-950 w-full px-4 py-2 mt-1 mb-4';
        $builder
            ->add('title', TextType::class, [
                'label'=>'Título',
                'attr'=>[
                    'class'=>$textInputCss
                ]
            ])
            ->add('description', TextareaType::class,[
                'label'=>'Sinopsis',
                'required'=>false,
                'attr'=>[
                    'rows'=>3,
                    'class'=>$textInputCss
                ]
            ])
            ->add('runtime', NumberType::class,[
                'label'=>'Duración',
                'attr'=>[
                    'class'=>$textInputCss
                ]
            ])
            ->add('budget', NumberType::class,[
                'label'=>'Presupuesto',
                'attr'=>[
                    'class'=>$textInputCss
                ]
            ])
            ->add('poster', null, [
                'label'=>'Cartel',
                'attr'=>[
                    'class'=>$textInputCss
                ],
            ])
            ->add('release_date', null, [
                'label'=>'Fecha de estreno',
                'attr'=>[
                    'class'=>$textInputCss
                ],
                'widget' => 'single_text',
            ])
            ->add('genre', EntityType::class, [
                'class' => Genre::class,
                'choice_label' => 'name',
                'label'=>'Género',
                'attr'=>[
                    'class'=>$textInputCss
                ],
            ])
            ->add('country', EntityType::class, [
                'class' => Country::class,
                'choice_label' => 'name',
                'label'=>'País',
                'attr'=>[
                    'class'=>$textInputCss
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
