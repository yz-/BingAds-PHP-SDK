<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets experiments by experiment identifiers.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getexperimentsbyids?view=bingads-13 GetExperimentsByIds Request Object
     * 
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetExperimentsByIds
     */
    final class GetExperimentsByIdsRequest
    {
        /**
         * The identifiers of the experiments to get.
         * @var integer[]
         */
        public $ExperimentIds;

        /**
         * Determines the index and size of experiment results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
