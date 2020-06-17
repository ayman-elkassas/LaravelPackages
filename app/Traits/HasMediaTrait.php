<?php


namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasMediaTrait
{
    //using traits if you want to bundle group of methods and just use in any class
    public function media(): MorphMany
    {
        // TODO: Implement media() method.
    }

    /**
     * Move a file to the media library.
     *
     * @param string|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return \Spatie\MediaLibrary\MediaCollections\FileAdder
     */
    public function addMedia($file): FileAdder
    {
        // TODO: Implement addMedia() method.
    }

    /**
     * Copy a file to the media library.
     *
     * @param string|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return \Spatie\MediaLibrary\MediaCollections\FileAdder
     */
    public function copyMedia($file): FileAdder
    {
        // TODO: Implement copyMedia() method.
    }

    public function hasMedia(string $collectionMedia = ''): bool
    {
        // TODO: Implement hasMedia() method.
    }

    /**
     * Get media collection by its collectionName.
     *
     * @param string $collectionName
     * @param array|callable $filters
     *
     * @return \Illuminate\Support\Collection
     */
    public function getMedia(string $collectionName = 'default', $filters = []): Collection
    {
        // TODO: Implement getMedia() method.
    }

    public function clearMediaCollection(string $collectionName = 'default'): HasMedia
    {
        // TODO: Implement clearMediaCollection() method.
    }

    /**
     * Remove all media in the given collection except some.
     *
     * @param string $collectionName
     * @param \Spatie\MediaLibrary\Media[]|\Illuminate\Support\Collection $excludedMedia
     *
     * @return $this
     */
    public function clearMediaCollectionExcept(string $collectionName = 'default', $excludedMedia = []): HasMedia
    {
        // TODO: Implement clearMediaCollectionExcept() method.
    }

    /**
     * Determines if the media files should be preserved when the media object gets deleted.
     *
     * @return bool
     */
    public function shouldDeletePreservingMedia(): bool
    {
        // TODO: Implement shouldDeletePreservingMedia() method.
    }

    /**
     * Cache the media on the object.
     *
     * @param string $collectionName
     *
     * @return mixed
     */
    public function loadMedia(string $collectionName)
    {
        // TODO: Implement loadMedia() method.
    }

    public function addMediaConversion(string $name): Conversion
    {
        // TODO: Implement addMediaConversion() method.
    }

    public function registerMediaConversions(Media $media = null): void
    {
        // TODO: Implement registerMediaConversions() method.
    }

    public function registerMediaCollections(): void
    {
        // TODO: Implement registerMediaCollections() method.
    }

    public function registerAllMediaConversions(): void
    {
        // TODO: Implement registerAllMediaConversions() method.
    }
}
