<?php

namespace App\Form;

use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('customer', EmailType::class,[
                'label' => 'email de contact'
            ])
            ->add('address', null, [
                'label' => 'adresse de livraison'
            ])
            ->add('city', null, [
                'label' => 'ville'
            ])
            ->add('postcode', null, [
                'label' => 'code postal'
            ])
            ->add('phone', null, [
                'label' => 'téléphone'
            ])
            ->add('valider', SubmitType::class, [
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
