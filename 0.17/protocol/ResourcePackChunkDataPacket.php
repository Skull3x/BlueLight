<?php

/*
 *   ____  _            _      _       _     _
 *  |  _ \| |          | |    (_)     | |   | |
 *  | |_) | |_   _  ___| |     _  __ _| |__ | |_
 *  |  _ <| | | | |/ _ \ |    | |/ _` | '_ \| __|
 *  | |_) | | |_| |  __/ |____| | (_| | | | | |_
 *  |____/|_|\__,_|\___|______|_|\__, |_| |_|\__|
 *                                __/ |
 *                               |___/
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author BlueLightJapan Team
 * 
*/


namespace pocketmine\network\protocol;

#include <rules/DataPacket.h>

class ResourcePackChunkDataPacket extends DataPacket{
	const NETWORK_ID = Info::RESOURCE_PACK_CHUNK_DATA_PACKET;

	public $string;
	public $int1;
	public $long;
	public $int2;
	public $byte;

	public function decode(){
	}

	public function encode(){
		$this->reset();
		$this->putString($this->string);
		$this->putUnsignedVarInt($this->int1);
		$this->putLong($this->long);
		$this->putUnsignedVarInt($this->int2);
		$this->putByte($this->byte);

	}
}