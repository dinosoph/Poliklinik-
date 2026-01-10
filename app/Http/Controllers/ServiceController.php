<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    private array $services = [

        'maternal-health' => [
            'title' => 'Maternal Health',
            'tagline' => 'Advanced care for mothers-to-be with personalised support and expertise',
            'image' => 'assets/img/health/maternal.webp',
            'description' => [
                'Our maternal health team provides comprehensive care throughout pregnancy, childbirth, and postpartum, 
                combining modern medical practices with years of specialised experience. From prenatal screenings to safe delivery and postnatal support, 
                we prioritise your health and your baby’s well-being with precision and care.',
                'With compassionate guidance, continuous monitoring, and personalised attention, we aim to improve maternal outcomes, 
                support healthy pregnancies, and ensure both mother and child thrive every step of the way.',
            ],
            'features' => [
                'Comprehensive prenatal check-ups',
                'Advanced diagnostic imaging for pregnancy',
                'Nutritional and lifestyle guidance for expecting mothers',
                'Labour and delivery support',
                'Postnatal care and monitoring',
                'Maternal mental health support',
            ],
        ],

        'general-consultation' => [
            'title' => 'General Consultation',
            'tagline' => 'Personalised medical care for everyday health concerns',
            'image' => 'assets/img/health/general.webp',
            'description' => [
                'Our general consultation services focus on early diagnosis and prevention.',
                'We provide reliable and personalised medical advice for all ages.',
            ],
            'features' => [
                'Comprehensive health assessment',
                'Preventive care planning',
                'Health monitoring',
            ],
        ],

        // ➕ Add remaining 9 services here
    ];

    public function show(string $slug)
    {
        abort_unless(isset($this->services[$slug]), 404);

        return view('service-details', [
            'service' => $this->services[$slug],
        ]);
    }
}