<?php
/**
 * Created by PhpStorm.
 * User: theophany
 * Date: 12/3/17
 * Time: 4:55 PM
 */

namespace AppBundle\Form;


class ReviewType
{
    /**
     * {@inheritdoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text')
            ->add('publicationDate')
            ->add('note')->add('userRated')
            ->add('reviewAuthor');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Review'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }
}