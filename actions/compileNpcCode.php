<?php
    // Variables
    $outFolder = "Output/";

    // Open File
    $handle = fopen($outFolder+"DoorKickerTools_NPCs", "w");

    // Prepare array
    $compileQueue = $GET_['npcqueue'];

    // Write Start Line
    fwrite($handle, "<Entities>\n");

    // Work through the Queue
    foreach($compileQueue as $unit) {
        // Compile Protocol
        fwrite($handle,'<Entity name="'.$unit[1].'_'.$unit[0].'" type="Human" subType="'.$unit[1].'" class="'.$unit[2].'" fogOfWarVisibility="hidden" sizeX="45" sizeY="40" bboxOffsetX="0" bboxOffsetY="0" tooltip="Suspect ('.$unit[3].')">');
        fwrite($handle,'	<FieldOfView degrees="'.$unit[5].'" eyeRadiusMeters="0.7" rangeMeters="'.$unit[6].'"/>');
        fwrite($handle,'	<MobilityModifiers moveSpeedLocalModifierPercent="'.$unit[7].'" turnSpeedLocalModifierPercent="'.$unit[8].'"/>');
        fwrite($handle,'	<Equipment>');
        fwrite($handle,'		<Item name="'.$unit[4].'"/>');
        fwrite($handle,'		<Item name="'.$unit[3].'"/>');
        fwrite($handle,'	</Equipment>');
        fwrite($handle,'	<Id name="'.$unit[0].'" portrait="'.$unit[9].'"/>');
        fwrite($handle,'');
        fwrite($handle,'	<Skin');
        fwrite($handle,'		pistol="'.$unit[10].'"');
        fwrite($handle,'		rifle="'.$unit[11].'"');
        fwrite($handle,'		shotgun="'.$unit[12].'"');
        fwrite($handle,'		weaponless="'.$unit[13].'"');
        fwrite($handle,'		legs="'.$unit[14].'"');
        fwrite($handle,'		death="'.$unit[15].'"');
        fwrite($handle,'	/>');
        fwrite($handle,'	<OffscreenIndicator>');
        fwrite($handle,'		<RenderObject2D texture="data/textures/gui/menus/menu_brief_badguy.tga"/>');
        fwrite($handle,'	</OffscreenIndicator>');
        fwrite($handle,'	<RenderObject2D layer="3"/>');
        fwrite($handle,'');
        fwrite($handle,'	<Behavior defaultState="default" defaultActivity="ACT_IDLE">');
        fwrite($handle,'		**AI_TYPE');
        fwrite($handle,'	</Behavior>');
        fwrite($handle,'</Entity>');
        fwrite($handle,'');
    }

    // Write End Line
    fwrite($handle, "</Entities>");

    // Close file
    fclose($handle);
?>