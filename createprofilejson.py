#!/usr/bin/python
# -*- coding: utf-8 -*-
import json
def main():
    jsondict = [
        {
            "screenname": "idlecool",
            "avatar":["avatars/idlecool/1.jpg",
                      "avatars/idlecool/2.jpg",
                      "avatars/idlecool/3.jpg",
                      "avatars/idlecool/4.jpg"],
            "desc": ["Pythonista",
                     "Anti-Social",
                     "&#x2593;&#x2593; &#x2593;&#x2593;&#x2593;&#x2593;&#x2593; &#x2593;&#x2593;&#x2593; &#x2593;&#x2593;&#x2593;&#x2593;&#x2593; &#x2593; &#x2593;&#x2593;&#x2593;&#x2593;&#x2593; &#x2593;&#x2593;&#x2593;&#x2593;&#x2593;&#x2593;&#x2593; &#x2593;&#x2593;&#x2593;",
                     "Thinks he is a Web Scraper",
                     "poda. that and all i wont do.",
                     "Shit! I think i have a personality disorder."],
            "profileurl": "http://blog.idlecool.net/",
            },
        {
            "screenname": "gsathya",
            "avatar":["avatars/gsathya/1.jpg",
                      ],
            "desc": ["Macfag, Droid Fanboi, Paranoid, Privacy, Emacs, Git.",
                     "Tor Contributor.",
                     "Pwned.",
                     "<3 Feroze",
                     "I'M OP BITCHES!"],
            "profileurl": "http://gsathya.in/",
            },
        {
            "screenname": "anirudh24seven",
            "avatar":["avatars/anirudh24seven/1.jpg",
                      ],
            "desc":["Android dev, Open Source evangelist, vim, python. Loves anything tech.",
                    "Carnatic vocalist, Mridangist. Coder rest of the time.",
                    "Customization trumps everything else!",
                    "\"Developers! Developers! Developers! Developers!\""],
            "profileurl": "http://twitter.com/anirudh24seven",
            },
        {
            "screenname": "Genghiz",
            "avatar":["avatars/Genghiz/1.jpg",
                      ],
            "desc":["Megalomaniac, paranoid, friendly, , frugal, wannabe, python, finance, PJs, chick magnet hip hop, etc.",
                    ],
            "profileurl": "http://feroze.in",
            },
        {
            "screenname": "beachbrake",
            "avatar":[
                ],
            "desc":["NSFW, Ardiuno, Python, anime, taekwondo and a few more nuts and bolts.",
                ],
            "profileurl": "http://priyakuber.in",
            },
        {
            "screenname": "yeskarthik",
            "avatar":["avatars/yeskarthik/1.jpg",
                      ],
            "desc":[""],
            "profileurl": "http://yeskarthik.in/",
            },
        {
            "screenname": "polkabot",
            "avatar":[],
            "desc": ["I am a bot with polka dots",
                     "I am girly",
                     ],
            "profileurl": "#",
            },
        {
            "screenname": "pranavrc",
            "avatar":[
                      ],
            "desc": ["Description: music theory, guitar&keys, electronics, finance, py, vim, ai, droid, food, fucking lazy, fucking sllllllllooooooooowwwww",
                     ],
            "profileurl": "http://gsathya.in/",
            },
    ]

    print json.dumps(jsondict)


if __name__ == "__main__":
    main()
