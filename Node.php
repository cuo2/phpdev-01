<?php 

class Node implements NodeInterface
{

    private string $name = '';

    private array $children = [];
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return self::print($this);
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Node[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    public function addChild(Node $node): self
    {
        $this->children[] = $node;

        return $this;
    }

    private static function print(Node $node, $level = 1)
    {
        $html = str_repeat('+ ', $level) . $node->getName()."\n";

        foreach ($node->getChildren() as $child) {
            $html .= self::print($child, $level + 1);
        }

        return $html;
    }

}