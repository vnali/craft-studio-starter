<?php

/**
 * Studio config.php
 *
 * This file exists only as a template for the Studio settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'studio.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [
    '*' => [
        'chapterField' => 'episodeChapter',
        'chapterBlockType' => 'chapter',
        'soundbiteField' => 'soundbite',
        'soundbiteBlockType' => 'soundbite',
        'fundingField' => 'funding',
        //'fundingBlockType' => 'podcastFunding',
        'podcastLicenseField' => 'podcastLicense',
        //'podcastLicenseBlockType' => 'podcastLicense',
        'podcastPersonField' => 'person',
        'podcastPersonBlockType' => 'person',
        //'episodeLicenseField' => 'episodeExtraData',
        //'episodeLicenseBlockType' => 'episodeLicense',
        'episodePersonField' => 'person',
        'episodePersonBlockType' => 'person',
        'transcriptField' => 'transcriptFormats',
        //'transcriptBlockType' => 'transcript',
        'transcriptTextField' => 'transcript',
        'trailerField' => 'podcastTrailer',
        'trailerBlockType' => 'trailer',
        'enclosureField' => 'alternateEnclosure',
        'enclosureBlockType' => 'enclosure',
        'podcastLocationField' => 'location',
        //'podcastLocationBlockType' => 'location',
        //'episodeLocationField' => 'location',
        //'episodeLocationBlockType' => 'location',
        'liveItemField' => 'liveItem',
        //'liveItemBlockType' => 'liveItem',
        'socialInteractField' => 'socialInteract',
        'podcastTxtField' => 'txt',
        'episodeTxtField' => 'txt',
        'podcastValueField' => 'value4value',
        'episodeValueField' => 'value4value',
    ],
];
