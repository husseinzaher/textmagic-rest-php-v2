<?php
/**
 * SubaccountWithToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TextMagic API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TextMagic\Models;

use \ArrayAccess;
use \TextMagic\ObjectSerializer;

/**
 * SubaccountWithToken Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubaccountWithToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubaccountWithToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'username' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'email' => 'string',
        'status' => 'string',
        'balance' => 'double',
        'phone' => 'string',
        'company' => 'string',
        'currency' => '\TextMagic\Models\Currency',
        'country' => '\TextMagic\Models\Country',
        'timezone' => '\TextMagic\Models\Timezone',
        'subaccountType' => 'string',
        'emailAccepted' => 'bool',
        'phoneAccepted' => 'bool',
        'avatar' => '\TextMagic\Models\UserImage',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'username' => null,
        'firstName' => null,
        'lastName' => null,
        'email' => null,
        'status' => null,
        'balance' => 'double',
        'phone' => null,
        'company' => null,
        'currency' => null,
        'country' => null,
        'timezone' => null,
        'subaccountType' => null,
        'emailAccepted' => null,
        'phoneAccepted' => null,
        'avatar' => null,
        'token' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'username' => 'username',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'email' => 'email',
        'status' => 'status',
        'balance' => 'balance',
        'phone' => 'phone',
        'company' => 'company',
        'currency' => 'currency',
        'country' => 'country',
        'timezone' => 'timezone',
        'subaccountType' => 'subaccountType',
        'emailAccepted' => 'emailAccepted',
        'phoneAccepted' => 'phoneAccepted',
        'avatar' => 'avatar',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'username' => 'setUsername',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'email' => 'setEmail',
        'status' => 'setStatus',
        'balance' => 'setBalance',
        'phone' => 'setPhone',
        'company' => 'setCompany',
        'currency' => 'setCurrency',
        'country' => 'setCountry',
        'timezone' => 'setTimezone',
        'subaccountType' => 'setSubaccountType',
        'emailAccepted' => 'setEmailAccepted',
        'phoneAccepted' => 'setPhoneAccepted',
        'avatar' => 'setAvatar',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'username' => 'getUsername',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'email' => 'getEmail',
        'status' => 'getStatus',
        'balance' => 'getBalance',
        'phone' => 'getPhone',
        'company' => 'getCompany',
        'currency' => 'getCurrency',
        'country' => 'getCountry',
        'timezone' => 'getTimezone',
        'subaccountType' => 'getSubaccountType',
        'emailAccepted' => 'getEmailAccepted',
        'phoneAccepted' => 'getPhoneAccepted',
        'avatar' => 'getAvatar',
        'token' => 'getToken'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_A = 'A';
    const STATUS_T = 'T';
    const SUBACCOUNT_TYPE_A = 'A';
    const SUBACCOUNT_TYPE_U = 'U';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_A,
            self::STATUS_T,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubaccountTypeAllowableValues()
    {
        return [
            self::SUBACCOUNT_TYPE_A,
            self::SUBACCOUNT_TYPE_U,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['subaccountType'] = isset($data['subaccountType']) ? $data['subaccountType'] : null;
        $this->container['emailAccepted'] = isset($data['emailAccepted']) ? $data['emailAccepted'] : null;
        $this->container['phoneAccepted'] = isset($data['phoneAccepted']) ? $data['phoneAccepted'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ($this->container['subaccountType'] === null) {
            $invalidProperties[] = "'subaccountType' can't be null";
        }
        $allowedValues = $this->getSubaccountTypeAllowableValues();
        if (!is_null($this->container['subaccountType']) && !in_array($this->container['subaccountType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subaccountType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['emailAccepted'] === null) {
            $invalidProperties[] = "'emailAccepted' can't be null";
        }
        if ($this->container['phoneAccepted'] === null) {
            $invalidProperties[] = "'phoneAccepted' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Sub-account ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username Username.
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName Account first name.
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName Account last name.
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Account Email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current account status: * **A** for Active * **T** for Trial.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param double $balance Account balance (in account currency).
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Contact phone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company Account company name.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \TextMagic\Models\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \TextMagic\Models\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \TextMagic\Models\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \TextMagic\Models\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return \TextMagic\Models\Timezone
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param \TextMagic\Models\Timezone $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets subaccountType
     *
     * @return string
     */
    public function getSubaccountType()
    {
        return $this->container['subaccountType'];
    }

    /**
     * Sets subaccountType
     *
     * @param string $subaccountType Type of account: *   **A** for Administrator sub-account *   **U** for Regular User
     *
     * @return $this
     */
    public function setSubaccountType($subaccountType)
    {
        $allowedValues = $this->getSubaccountTypeAllowableValues();
        if (!in_array($subaccountType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subaccountType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subaccountType'] = $subaccountType;

        return $this;
    }

    /**
     * Gets emailAccepted
     *
     * @return bool
     */
    public function getEmailAccepted()
    {
        return $this->container['emailAccepted'];
    }

    /**
     * Sets emailAccepted
     *
     * @param bool $emailAccepted Does the account have a confirmed Email?.
     *
     * @return $this
     */
    public function setEmailAccepted($emailAccepted)
    {
        $this->container['emailAccepted'] = $emailAccepted;

        return $this;
    }

    /**
     * Gets phoneAccepted
     *
     * @return bool
     */
    public function getPhoneAccepted()
    {
        return $this->container['phoneAccepted'];
    }

    /**
     * Sets phoneAccepted
     *
     * @param bool $phoneAccepted Does the account have a confirmed Phone Number?.
     *
     * @return $this
     */
    public function setPhoneAccepted($phoneAccepted)
    {
        $this->container['phoneAccepted'] = $phoneAccepted;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return \TextMagic\Models\UserImage
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param \TextMagic\Models\UserImage $avatar avatar
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Access token of account.
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


