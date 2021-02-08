<?php


namespace ParseThisNews\Model;


class ParserSettings
{
    private string $source;
    private ?string $newsLimit;
    private string $linkSelector;
    private string $titleSelector;
    private string $textSelector;
    private string $imageSelector;


    public function getSource(): string
    {
        return $this->source;
    }

    public function getLinkSelector(): string
    {
        return $this->linkSelector;
    }

    public function getTitleSelector(): string
    {
        return $this->titleSelector;
    }

    public function getTextSelector(): string
    {
        return $this->textSelector;
    }

    public function getImageSelector(): string
    {
        return $this->imageSelector;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function setLinkSelector(string $linkSelector): self
    {
        $this->linkSelector = $linkSelector;
        return $this;
    }

    public function setTitleSelector(string $titleSelector): self
    {
        $this->titleSelector = $titleSelector;
        return $this;
    }

    public function setTextSelector(string $textSelector): self
    {
        $this->textSelector = $textSelector;
        return $this;
    }

    public function setImageSelector(string $imageSelector): self
    {
        $this->imageSelector = $imageSelector;
        return $this;
    }

    public function getNewsLimit(): ?string
    {
        return $this->newsLimit;
    }

    public function setNewsLimit(?string $newsLimit): self
    {
        $this->newsLimit = $newsLimit;
        return $this;
    }
}