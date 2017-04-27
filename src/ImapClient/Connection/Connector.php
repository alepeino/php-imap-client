<?php
/**
 * Copyright (C) 2016-2017  SSilence
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

namespace SSilence\ImapClient\Connection;

interface Connector
{
    const SERVICE_IMAP = 'imap';
    const SERVICE_POP3 = 'pop3';
    const SERVICE_NNTP = 'nntp';
    const ENCRYPT_SSL = 'ssl';
    const ENCRYPT_TLS = 'tls';
    const ENCRYPT_NOTLS = 'notls';
    const VALIDATE_CERT = 'validate-cert';
    const NOVALIDATE_CERT = 'novalidate-cert';
    const DEBUG = 'debug';
    const SECURE = 'secure';
    const NORSH = 'norsh';
    const READONLY = 'readonly';
    const ANONYMOUS = 'anonymous';

    public function open();
    public function close();

    public function save();

    public function getError();

    public function selectFolder();
    public function getFolders();
    public function createFolder();
    public function renameFolder();
    public function deleteFolder();

    public function getMessageCount();
    public function getMessageHeaders();
    public function getUnreadMessageCount();
    public function getUnreadMessages();
    public function getMessages();
    public function searchMessages($criteria);

    public function setMessagesUnseen($ids);
    public function moveMessages($ids);
    public function deleteMessages($ids);

    public function appendMessage();
}
