<?php

namespace Craft;

return [
  'endpoints' => [
    'api/postcodes.json' => function () {
      return [
        'elementType' => 'Entry',
        'section' => 'postcode',
        'criteria' => [
          'title' => craft()->request->getParam('postcode')
        ],
        'first' => true,
        'transformer' => function(EntryModel $entry) {
          return [
            'suburb' => $entry->suburb,
            'state' => $entry->state,
          ];
        },
      ];
    }
  ]
];
