<?php namespace Lavoaster\OAuth2Server\Storage;

interface ClientInterface extends PersistenceInterface
{
	/**
	 * Returns the clients id
	 *
	 * @return string
	 */
	public function getId();

	/**
	 * Sets the clients id
	 *
	 * @param string $id
	 * @return void
	 */
	public function setId($id);

	/**
	 * Returns the clients secret
	 *
	 * @return string
	 */
	public function getSecret();

	/**
	 * Sets the clients secret
	 *
	 * @param string $secret
	 * @return void
	 */
	public function setSecret($secret);

	/**
	 * Returns the clients supported scopes
	 *
	 * @return array
	 */
	public function getSupportedScopes();

	/**
	 * Sets the supported scopes the client can use
	 *
	 * @param array $scopes
	 * @return void
	 */
	public function setSupportedScopes(array $scopes);

	/**
	 * Returns all of the clients redirect uris
	 *
	 * @return array
	 */
	public function getRedirectUris();

	/**
	 * Checks if the client has access to a given scope
	 *
	 * @param string $scope
	 * @return bool
	 */
	public function hasScope($scope);

	/**
	 * Checks if the client has access to a set of scopes
	 *
	 * @param array $scopes
	 * @return bool
	 */
	public function hasScopes(array $scopes);

	/**
	 * Sets the clients redirect uris
	 *
	 * @param array $redirectUris
	 * @return void
	 */
	public function setRedirectUris(array $redirectUris);

	/**
	 * Adds a redirect uri to the clients supported redirect uri's
	 *
	 * @param string $redirectUri
	 * @return void
	 */
	public function addRedirectUri($redirectUri);

	/**
	 * Removes the given redirect uri from the client
	 *
	 * @param string $redirectUri
	 * @return void
	 */
	public function removeRedirectUri($redirectUri);

	/**
	 * Checks if the given redirect uri is resisted with the client
	 *
	 * @param string $redirectUri
	 * @return bool
	 */
	public function checkRedirectUri($redirectUri);

	/**
	 * Returns the client type
	 *
	 * @return string
	 */
	public function getType();

	/**
	 * Sets the client type
	 *
	 * @param string $type
	 * @return mixed
	 */
	public function setType($type);
}