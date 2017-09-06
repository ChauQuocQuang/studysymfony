<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlsCourseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('courseVersion')->add('courseCode')->add('courseName')->add('courseCatId')->add('mandatory')->add('startDate')->add('endDate')->add('intruduce')->add('description')->add('trainerId')->add('createdDate')->add('createdBy')->add('status')->add('approve')->add('hotCourse')->add('traineeCount')->add('lectureCount')->add('companyCode')->add('avatar')->add('rankCode')->add('regionCode')->add('public');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PlsCourse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_plscourse';
    }


}
