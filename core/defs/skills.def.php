<?php
/**
 * Ultima PHP - OpenSource Ultima Online Server written in PHP
 * Version: 0.1 - Pre Alpha
 */

abstract class SkillsDefs {
    /* Skill Ids */
    const SKILL_ALCHEMY       = 0;
    const SKILL_ANATOMY       = 1;
    const SKILL_ANIMALLORE    = 2;
    const SKILL_ITEMID        = 3;
    const SKILL_ARMSLORE      = 4;
    const SKILL_PARRYING      = 5;
    const SKILL_BEGGING       = 6;
    const SKILL_BLACKSMITH    = 7;
    const SKILL_BOWCRAFT      = 8;
    const SKILL_PEACEMAKING   = 9;
    const SKILL_CAMPING       = 10;
    const SKILL_CARPENTRY     = 11;
    const SKILL_CARTOGRAPHY   = 12;
    const SKILL_COOKING       = 13;
    const SKILL_DETECTHIDDEN  = 14;
    const SKILL_ENTICEMENT    = 15;
    const SKILL_EVALINT       = 16;
    const SKILL_HEALING       = 17;
    const SKILL_FISHING       = 18;
    const SKILL_FORENSICS     = 19;
    const SKILL_HERDING       = 20;
    const SKILL_HIDING        = 21;
    const SKILL_PROVOCATION   = 22;
    const SKILL_INSCRIPTION   = 23;
    const SKILL_LOCKPICK      = 24;
    const SKILL_MAGERY        = 25;
    const SKILL_MAGICRESIST   = 26;
    const SKILL_TACTICS       = 27;
    const SKILL_SNOOPING      = 28;
    const SKILL_MUSICIANSHIP  = 29;
    const SKILL_POISONING     = 30;
    const SKILL_ARCHERY       = 31;
    const SKILL_SPIRITSPEAK   = 32;
    const SKILL_STEALING      = 33;
    const SKILL_TAILORING     = 34;
    const SKILL_TAMING        = 35;
    const SKILL_TASTEID       = 36;
    const SKILL_TINKERING     = 37;
    const SKILL_TRACKING      = 38;
    const SKILL_VET           = 39;
    const SKILL_SWORDSMANSHIP = 40;
    const SKILL_MACEFIGHTING  = 41;
    const SKILL_FENCING       = 42;
    const SKILL_WRESTLING     = 43;
    const SKILL_LUMBERJACK    = 44;
    const SKILL_MINING        = 45;
    const SKILL_MEDITATION    = 46;
    const SKILL_STEALTH       = 47;
    const SKILL_REMOVETRAP    = 48;
    const SKILL_NECROMANCY    = 49;
    const SKILL_FOCUS         = 50;
    const SKILL_CHIVALRY      = 51;
    const SKILL_BUSHIDO       = 52;
    const SKILL_NINJITSU      = 53;
    const SKILL_SPELLWEAVING  = 54;
    const SKILL_MYSTICISM     = 55;
    const SKILL_IMBUING       = 56;
    const SKILL_THROWING      = 57;
    const SKILL_ALLSKILLS     = 58;

    /* Skill Flags */
    const SKILL_FLAG_DISABLED    = 0x000;
    const SKILL_FLAG_FIGHT       = 0x001;
    const SKILL_FLAG_MAGIC       = 0x002;
    const SKILL_FLAG_CRAFT       = 0x004;
    const SKILL_FLAG_IM_MOBILE   = 0x008;
    const SKILL_FLAG_SELECTABLE  = 0x010;
    const SKILL_FLAG_NO_MIN_DIST = 0x020;
    const SKILL_FLAG_NO_ANIM     = 0x040;
    const SKILL_FLAG_NO_SFX      = 0x080;
    const SKILL_FLAG_RANGED      = 0x100;
    const SKILL_FLAG_GATHER      = 0x200;
    const SKILL_FLAG_SCRIPTED    = 0x300;
}