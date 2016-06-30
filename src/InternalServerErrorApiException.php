<?php

namespace Notimatica\ApiExceptions;

use Exception;
use Notimatica\ApiExceptions\Contracts\LogTrace;

class InternalServerErrorApiException extends ApiException implements LogTrace
{
    /**
     * @param string $message
     * @param Exception $previous
     */
    public function __construct($message = '', Exception $previous = null)
    {
        if (empty($message)) {
            $message = 'The server encountered an internal error or misconfiguration and was unable to complete your request.';
        }

        parent::__construct(500, 'internal_server_error', $message, $previous);
    }
}
