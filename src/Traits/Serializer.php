<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Traits;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerializer;

trait Serializer {

    /**
     * Serializes the given data into the specified format.
     *
     * @param string $format The format to serialize the data into. Default is 'json'.
     * @param array $context Options that affect the serialization process.
     * 
     * @return mixed The serialized data.
     */
    protected function serialize(string $format = 'json', array $context = []): mixed
    {   
        $normalizer = new ObjectNormalizer();
        $encoder = new JsonEncoder();
        $data = $this;

        $serializer = new   SymfonySerializer([$normalizer], [$encoder]);
        return $serializer->serialize($data, $format, $context);
    }
    
    /**
     * Converts the given data to an array.
     *
     * @param array $context Optional context for the conversion process.
     * @return array The converted array.
     */
    public function toArray(array $context = []): array
    {
        return json_decode($this->serialize('json', $context), true);
    }

    /**
     * Converts the given data to an object.
     *
     * @param mixed $data The data to be converted.
     * @param array $context Optional context array to influence the conversion process.
     * @return object The converted object.
     */
    public function toObject($data, array $context = []): object
    {
        return $this->serialize('json', $context);
    }

    
}
