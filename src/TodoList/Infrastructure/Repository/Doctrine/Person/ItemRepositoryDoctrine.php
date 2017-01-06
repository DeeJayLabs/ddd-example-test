<?php

namespace TodoList\Infrastructure\Repository\Doctrine\Person;

use Doctrine\ORM\EntityManager;
use TodoList\Domain\Model\Item\Item;
use TodoList\Domain\Model\Item\ItemId;
use TodoList\Domain\Model\Item\ItemRepository;

/**
 * PersonRepositoryDoctrine
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
final class ItemRepositoryDoctrine implements ItemRepository
{

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    private $repo;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * ItemRepositoryDoctrine constructor.
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->repo = $entityManager->getRepository(Item::class);
    }

    /**
     * @param ItemId $itemId
     *
     * @return null|object
     */
    public function find(ItemId $itemId)
    {
        return $this->repo->find($itemId);
    }

    /**
     * @return array
     */
    public function findAll()
    {
        return $this->repo->findAll();
    }

    /**
     * @param Item $item
     */
    public function remove(Item $item)
    {
        $this->em->remove($item);
        $this->em->flush($item);
    }

    /**
     * @param Item $item
     */
    public function persist(Item $item)
    {
        $this->em->persist($item);
        $this->em->flush($item);
    }

    /**
     * @return ItemId
     */
    public function nextIdentity()
    {
        return new ItemId();
    }
}