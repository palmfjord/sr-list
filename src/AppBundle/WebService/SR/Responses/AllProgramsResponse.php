<?php
/**
 * The response object for "programs/index" method
 *
 * @author Johan Palmfjord <johan.plago@gmail.com>
 * @copyright Johan Palmfjord, 2016
 * @version 1.0
 */

namespace AppBundle\WebService\SR\Responses;

use AppBundle\WebService\SR\Responses\Entity\Program;

use JMS\Serializer\Annotation as Jms;

class AllProgramsResponse extends BaseResponse
{
    /**
     * @var Program[]
     *
     * @Jms\Type("array<AppBundle\WebService\SR\Responses\Entity\Program>")
     */
    private $programs;

    /**
     * Find all programs
     *
     * @return Program[]
     */
    public function getEntities() : array
    {
        return $this->getPrograms();
    }


    /**
     * @return Entity\Program[]
     */
    public function getPrograms() : array
    {
        return $this->programs;
    }

    /**
     * @param Entity\Program[] $programs
     *
     * @return AllProgramsResponse
     */
    public function setPrograms(array $programs) : AllProgramsResponse
    {
        $this->programs = $programs;

        return $this;
    }
}
