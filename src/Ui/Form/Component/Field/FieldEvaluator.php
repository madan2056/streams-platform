<?php namespace Anomaly\Streams\Platform\Ui\Form\Component\Field;

use Anomaly\Streams\Platform\Support\Evaluator;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class FieldEvaluator
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class FieldEvaluator
{

    /**
     * The evaluator utility.
     *
     * @var Evaluator
     */
    protected $evaluator;

    /**
     * Create a new FieldEvaluator instance.
     *
     * @param Evaluator $evaluator
     */
    public function __construct(Evaluator $evaluator)
    {
        $this->evaluator = $evaluator;
    }

    /**
     * Evaluate the form fields.
     *
     * @param FormBuilder $builder
     */
    public function evaluate(FormBuilder $builder)
    {
        $builder->setFields($this->evaluator->evaluate($builder->getFields(), compact('builder')));
    }
}
