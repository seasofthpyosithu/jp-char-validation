<?php


namespace Seasofthpyosithu\JpCharValidation\Rules;


use Illuminate\Validation\Validator;

class JpCharValidator extends Validator
{
    private $regex = [
        'hiragana' => '\x{3040}-\x{309F}',
        'katakana' => '\x{30A0}-\x{30FF}',
        'kanji' => '\x{3400}-\x{4DB5}\x{4E00}-\x{9FCB}\x{F900}-\x{FA6A}',
        'hankaku' => 'A-z0-9\x{FF5F}-\x{FF9F}!"#$%&\'()*+,-./:;<=>?@`[]\\^_`{}|~',
        'hankaku_alphanumeric' => 'A-z0-9',
        'hankaku_alphanumeric_symbol' => 'A-z0-9｟｠｡｢｣､･',
        'hankaku_number' => '0-9',
        'zenkaku' => '\x{FF01}-\x{FF5E}\x{3040}-\x{309F}\x{30A0}-\x{30FF}\x{3000}-\x{303F}', /** A-z0-9 and other char, hiragana, katakana, kanji, symbol */
        'zenkaku_alphanumeric' => 'Ａ-ｚ０-９',
        'zenkaku_alphanumeric_symbol' => '\x{FF01}-\x{FF5E}',
        'zenkaku_number' => '０-９',
    ];

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateKanji($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['kanji']}]+$/mu";

    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateHiragana($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['hiragana']}]+$/mu";
        return preg_match($reg, $value);
    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateKatakana($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['katakana']}]+$/mu";
        return preg_match($reg, $value);
    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateHankaku($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['hankaku']}]+$/mu";
        return preg_match($reg, $value);
    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateHankakuAlphanumeric($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['hankaku_alphanumeric']}]+$/mu";
        return preg_match($reg, $value);
    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateHankakuAlphanumericSymbol($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['hankaku_alphanumeric_symbol']}]+$/mu";
        return preg_match($reg, $value);
    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateHankakuNumber($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['hankaku_number']}]+$/mu";
        return preg_match($reg, $value);
    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateZenkaku($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['zenkaku']}]+$/mu";
        return preg_match($reg, $value);
    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateZenkakuAlphanumeric($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['zenkaku_alphanumeric']}]+$/mu";
        return preg_match($reg, $value);
    }

    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateZenkakuAlphanumericSymbol($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['zenkaku_alphanumeric_symbol']}]+$/mu";
        return preg_match($reg, $value);
    }


    /**
     * @param string $attributes
     * @param string|array $value
     * @param string|array $parameters
     * @return bool
     */
    public function validateZenkakuNumber($attributes, $value, $parameters)
    {
        $reg = "/^[{$this->regex['zenkaku_number']}]+$/mu";
        return preg_match($reg, $value);
    }
}
