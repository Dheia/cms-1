# Release Notes for Craft CMS 4

## Unreleased

### Added
- Added the `index-assets/cleanup` command.
- Added support for `JSON` columns. ([#9089](https://github.com/craftcms/cms/pull/9089))
- Added `craft\base\Volume::CONFIG_MIMETYPE`.
- Added `craft\base\Volume::CONFIG_VISIBILITY`.
- Added `craft\base\Volume::VISIBILITY_DEFAULT`.
- Added `craft\base\Volume::VISIBILITY_HIDDEN`.
- Added `craft\base\Volume::VISIBILITY_PUBLIC`.
- Added `craft\behaviors\SessionBehavior::getError()`.
- Added `craft\behaviors\SessionBehavior::getNotice()`.
- Added `craft\controllers\AssetIndexesController`.
- Added `craft\db\Migration::convertColumnToJson()`.
- Added `craft\db\Table::ASSETINDEXINGSESSIONS`.
- Added `craft\errors\MissingVolumeFolderException`.
- Added `craft\helpers\Assets::downloadFile()`.
- Added `craft\models\AssetIndexingSession`.
- Added `craft\models\VolumeListing`.
- Added `craft\records\AssetIndexingSession`.
- Added `craft\services\AssetIndexer::createIndexingSession()`.
- Added `craft\services\AssetIndexer::getExistingIndexingSessions()`.
- Added `craft\services\AssetIndexer::getIndexingSessionById()`.
- Added `craft\services\AssetIndexer::getMissingEntriesForSession()`.
- Added `craft\services\AssetIndexer::getSkippedItemsForSession()`.
- Added `craft\services\AssetIndexer::indexFileByListing()`.
- Added `craft\services\AssetIndexer::indexFolderByEntry()`.
- Added `craft\services\AssetIndexer::indexFolderByListing()`.
- Added `craft\services\AssetIndexer::processIndexSession()`.
- Added `craft\services\AssetIndexer::removeCliIndexingSessions()`.
- Added `craft\services\AssetIndexer::startIndexingSession()`.
- Added `craft\services\AssetIndexer::stopIndexingSession()`.
- Added `craft\services\AssetTransforms::deleteTransformIndexDataByAssetIds()`.

### Changed
- Craft now requires PHP 7.4 or later.
- Relational fields now load elements in the current site rather than the primary site, if the source element isn’t localizable. ([#7048](https://github.com/craftcms/cms/issues/7048))
- `craft\base\Model::datetimeAttributes()` is now called from the constructor, instead of the `init()` method.
- `craft\base\Model::setAttributes()` now normalizes date attributes into `DateTime` objects.
- `craft\helpers\Db::prepareValueForDb()` now has a `$columnType` argument.
- `craft\services\AssetIndexer::storeIndexList()` now expects the first argument to be a generator that returns `craft\models\VolumeListing` objects.
- `craft\services\Assets::ensureFolderByFullPathAndVolume()` now returns a `craft\models\VolumeFolder` object rather than a folder ID.
- `craft\services\Assets::ensureTopFolder()` now returns a `craft\models\VolumeFolder` object rather than a folder ID.
- `craft\services\UserPermissions::getAllPermissions()` and `getAssignablePermissions()` now return permission groups as arrays with `heading` and `permission` sub-keys, fixing a bug where two groups with the same heading would conflict with each other. ([#7771](https://github.com/craftcms/cms/issues/7771))
- Local volumes no longer use Flysystem.
- Updated Twig to 3.3.
- Updated vue-autosuggest to 2.2.0.

### Deprecated
- Deprecated `craft\base\VolumeInterface::createFileByStream()`.
- Deprecated `craft\base\VolumeInterface::saveFileLocally()`.
- Deprecated `craft\base\VolumeInterface::updateFileByStream()`.
- Deprecated `craft\helpers\ArrayHelper::append()`. `array_unshift()` should be used instead.
- Deprecated `craft\helpers\ArrayHelper::prepend()`. `array_push()` should be used instead.

### Removed
- Removed the `suppressTemplateErrors` config setting.
- Removed the `craft.categoryGroups` Twig variable.
- Removed the `craft.config` Twig variable.
- Removed the `craft.deprecator` Twig variable.
- Removed the `craft.elementIndexes` Twig variable.
- Removed the `craft.emailMessages` Twig variable.
- Removed the `craft.feeds` Twig variable.
- Removed the `craft.fields` Twig variable.
- Removed the `craft.globals` Twig variable.
- Removed the `craft.i18n` Twig variable.
- Removed the `craft.request` Twig variable.
- Removed the `craft.sections` Twig variable.
- Removed the `craft.session` Twig variable.
- Removed the `craft.systemSettings` Twig variable.
- Removed the `craft.userGroups` Twig variable.
- Removed the `craft.userPermissions` Twig variable.
- Removed `craft\base\FlysystemVolume`.
- Removed `craft\base\VolumeInterface::createDir()`. `createDirectory()` can be used instead.
- Removed `craft\base\VolumeInterface::deleteDir()`. `deleteDirectory()` can be used instead.
- Removed `craft\base\VolumeInterface::getFileMetadata()`. `getFileSize()` and `getDateModified()` can be used instead.
- Removed `craft\base\VolumeInterface::renameDir()`. `renameDirectory()` can be used instead.
- Removed `craft\controllers\UtilitiesController::actionAssetIndexPerformAction()`.
- Removed `craft\services\AssetIndexer::deleteStaleIndexingData()`.
- Removed `craft\services\AssetIndexer::extractFolderItemsFromIndexList()`.
- Removed `craft\services\AssetIndexer::extractSkippedItemsFromIndexList()`.
- Removed `craft\services\AssetIndexer::getIndexingSessionId()`.
- Removed `craft\services\AssetIndexer::getMissingFiles()`.
- Removed `craft\services\AssetIndexer::prepareIndexList()`.
- Removed `craft\services\AssetIndexer::processIndexForVolume()`.
- Removed `craft\web\View::$minifyCss`.
- Removed `craft\web\View::$minifyJs`.
- Removed `craft\web\View::renderTemplateMacro()`.
- Removed `craft\web\twig\Template`.
- Removed `craft\web\twig\variables\CategoryGroups`.
- Removed `craft\web\twig\variables\Config`.
- Removed `craft\web\twig\variables\Deprecator`.
- Removed `craft\web\twig\variables\ElementIndexes`.
- Removed `craft\web\twig\variables\EmailMessages`.
- Removed `craft\web\twig\variables\Feeds`.
- Removed `craft\web\twig\variables\Fields`.
- Removed `craft\web\twig\variables\Globals`.
- Removed `craft\web\twig\variables\I18N`.
- Removed `craft\web\twig\variables\Request`.
- Removed `craft\web\twig\variables\Sections`.
- Removed `craft\web\twig\variables\SystemSettings`.
- Removed `craft\web\twig\variables\UserGroups`.
- Removed `craft\web\twig\variables\UserPermissions`.
- Removed `craft\web\twig\variables\UserSession`.
- Removed the Flysystem library. The `craftcms/flysystem-adapter` package now provides a base Flysystem adapter class.
