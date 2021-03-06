<?php

declare(strict_types=1);

namespace KejawenLab\Application\SemartHris\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
class RemoveReasonTextFieldSubscriber implements EventSubscriberInterface, FieldRemoverInterface
{
    /**
     * @param FormEvent $event
     */
    public function remove(FormEvent $event): void
    {
        $event->getForm()->remove('reason_text');
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [FormEvents::PRE_SUBMIT => 'remove'];
    }
}
