<?php

namespace KejawenLab\Application\SemartHris\Component\Contract\Model;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
interface Contractable
{
    /**
     * @return ContractInterface|null
     */
    public function getContract(): ? ContractInterface;

    /**
     * @param ContractInterface|null $contract
     */
    public function setContract(ContractInterface $contract = null): void;
}
