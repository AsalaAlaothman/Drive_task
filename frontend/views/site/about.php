<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <table>
        <thead>
            <th class="text-center"> Title</th>
            <th class="text-center">thumbnailLink</th>
            <th class="text-center">EmbedLink (Download) Link</th>
            <th class="text-center">modifiedDate</th>
            <th class="text-center">FileSize(MB)</th>
            <th class="text-center">ownerNames</th>
        </thead>
        <tbody>
            <?php foreach ($files as $file) : ?>
                <tr>
                    <td class="text-center"><?= $file->name ?> </td>
                    <td class="text-center"><a href="<?= $file->thumbnailLink ?>" target="_blank" rel="noopener noreferrer">ThumbnailLink</a></td>
                    <td class="text-center"><a href="<?= $file->webContentLink ?>" target="_blank" rel="noopener noreferrer">Download</a></td>
                    <td class="text-center"><?= Yii::$app->formatter->asDate($file->modifiedTime, 'Y-m-d') ?></td>
                    <td class="text-center"><?= number_format($file->size  / 1024 / 1024, 2)  ?></td>
                    <td class="text-center"> <?= $file->owners[0]->getDisplayName() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>