<?php
namespace ToDoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ItemsType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder , array $options)
    {
        $builder

            ->add('name','text')
            ->add('due_date', 'datetime')
            ->add('location','text')
            ->add('created', 'datetime')
            ->add('submit', 'submit')

        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'items' => 'AppBundle\Entity\items'
        ));
    }





    public function GetName()
    {
         return 'items';
    }
}