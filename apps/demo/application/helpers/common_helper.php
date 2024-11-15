<?php

function isProduction(): bool
{
	return ENVIRONMENT === 'production';
}

function isDevelopment(): bool
{
	return ENVIRONMENT === 'development';
}
