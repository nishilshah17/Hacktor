<?php

ini_set('display_errors', 1);
error_reporting(~0);

$json = '{
    "jd_data": {
        "machines": {
            "links": [
                {
                    "rel": "self",
                    "uri": "https: //api.deere.com/platform/machines"
                }
            ],
            "total": 3,
            "values": [
                {
                    "vin": "PCFVUGALC0063",
                    "name": "PCFVUGALC0063",
                    "productKey": "58433029",
                    "telematicsState": "active",
                    "capabilities": [],
                    "terminals": {
                        "links": null,
                        "otherAttributes": {}
                    },
                    "displays": {
                        "links": null,
                        "otherAttributes": {}
                    },
                    "GUID": "0f25fafe-f9e6-4370-8ced-97e8f39811c1",
                    "links": [
                        {
                            "rel": "self",
                            "uri": "187935"
                        },
                        {
                            "rel": "organizations",
                            "uri": "223031"
                        },
                        {
                            "rel": "maintenancePlans",
                            "uri": "187935"
                        },
                        {
                            "rel": "locations",
                            "uri": "187935"
                        },
                        {
                            "rel": "terminals",
                            "uri": "187935"
                        },
                        {
                            "rel": "displays",
                            "uri": "187935"
                        },
                        {
                            "rel": "measurements",
                            "uri": "187935"
                        },
                        {
                            "rel": "engineHours",
                            "uri": "187935"
                        },
                        {
                            "rel": "hoursOfOperation",
                            "uri": "187935"
                        },
                        {
                            "rel": "distanceTraveled",
                            "uri": "187935"
                        },
                        {
                            "rel": "deviceStateReports",
                            "uri": "187935"
                        },
                        {
                            "rel": "locationHistory",
                            "uri": "187935"
                        },
                        {
                            "rel": "capabilities",
                            "uri": "187935"
                        },
                        {
                            "rel": "categories",
                            "uri": "187935"
                        }
                    ],
                    "id": "187935"
                },
                {
                    "vin": "PCFVUGALC0065",
                    "name": "PCFVUGALC0065",
                    "productKey": "58433032",
                    "telematicsState": "active",
                    "capabilities": [],
                    "terminals": {
                        "links": null,
                        "otherAttributes": {}
                    },
                    "displays": {
                        "links": null,
                        "otherAttributes": {}
                    },
                    "GUID": "46fcedd5-266a-4367-9922-27651053d131",
                    "links": [
                        {
                            "rel": "self",
                            "uri": "187937"
                        },
                        {
                            "rel": "organizations",
                            "uri": "https: //api.deere.com/platform/organizations/223031"
                        },
                        {
                            "rel": "maintenancePlans",
                            "uri": "https: //api.deere.com/platform/machines/187937/maintenancePlans"
                        },
                        {
                            "rel": "locations",
                            "uri": "https: //api.deere.com/platform/machines/187937/location"
                        },
                        {
                            "rel": "terminals",
                            "uri": "https: //api.deere.com/platform/machines/187937/terminals"
                        },
                        {
                            "rel": "displays",
                            "uri": "https: //api.deere.com/platform/machines/187937/displays"
                        },
                        {
                            "rel": "measurements",
                            "uri": "https: //api.deere.com/platform/machines/187937/machineMeasurements"
                        },
                        {
                            "rel": "engineHours",
                            "uri": "https: //api.deere.com/platform/machines/187937/engineHours"
                        },
                        {
                            "rel": "hoursOfOperation",
                            "uri": "https: //api.deere.com/platform/machines/187937/hoursOfOperation"
                        },
                        {
                            "rel": "distanceTraveled",
                            "uri": "https: //api.deere.com/platform/machines/187937/distanceTraveled"
                        },
                        {
                            "rel": "deviceStateReports",
                            "uri": "https: //api.deere.com/platform/machines/187937/deviceStateReports"
                        },
                        {
                            "rel": "locationHistory",
                            "uri": "https: //api.deere.com/platform/machines/187937/locationHistory"
                        },
                        {
                            "rel": "capabilities",
                            "uri": "https: //api.deere.com/platform/machines/187937/capabilities"
                        },
                        {
                            "rel": "categories",
                            "uri": "https: //api.deere.com/platform/machines/187937/categories"
                        }
                    ],
                    "id": "187937"
                },
                {
                    "vin": "RW8430T904057",
                    "name": "HackIL8430T",
                    "productKey": "10435875",
                    "engineSerialNumber": "RG6090L033452",
                    "telematicsState": "active",
                    "capabilities": [],
                    "terminals": {
                        "links": null,
                        "otherAttributes": {}
                    },
                    "displays": {
                        "links": null,
                        "otherAttributes": {}
                    },
                    "GUID": "709f8d16-4982-47d8-8758-06bf6a710754",
                    "links": [
                        {
                            "rel": "self",
                            "uri": "234474"
                        },
                        {
                            "rel": "organizations",
                            "uri": "234474"
                        },
                        {
                            "rel": "ping",
                            "uri": "234474"
                        },
                        {
                            "rel": "maintenancePlans",
                            "uri": "234474"
                        },
                        {
                            "rel": "locations",
                            "uri": "234474"
                        },
                        {
                            "rel": "terminals",
                            "uri": "234474"
                        },
                        {
                            "rel": "displays",
                            "uri": "234474"
                        },
                        {
                            "rel": "measurements",
                            "uri": "234474"
                        },
                        {
                            "rel": "engineHours",
                            "uri": "234474"
                        },
                        {
                            "rel": "hoursOfOperation",
                            "uri": "234474"
                        },
                        {
                            "rel": "distanceTraveled",
                            "uri": "234474"
                        },
                        {
                            "rel": "deviceStateReports",
                            "uri": "234474"
                        },
                        {
                            "rel": "locationHistory",
                            "uri": "234474"
                        },
                        {
                            "rel": "capabilities",
                            "uri": "234474"
                        },
                        {
                            "rel": "categories",
                            "uri": "234474"
                        }
                    ],
                    "id": "234474"
                }
            ]
        },
        "locations": {
            "links": [
                {
                    "rel": "self",
                    "uri": "https: //api.deere.com/platform/machineLocations"
                }
            ],
            "total": 3,
            "values": [
                {
                    "createTimestamp": "2015-02-28T23: 00: 55.000Z",
                    "machineState": {},
                    "origin": "JDLINK",
                    "point": {
                        "lat": 40.116743,
                        "lon": -88.224438,
                        "links": null
                    },
                    "eventTimestamp": "2015-02-28T23: 00: 55.000Z",
                    "links": [
                        {
                            "rel": "machine",
                            "uri": "187937"
                        }
                    ]
                },
                {
                    "createTimestamp": "2015-02-20T17: 14: 01.000Z",
                    "machineState": {},
                    "origin": "JDLINK",
                    "point": {
                        "lat": 41.639138,
                        "lon": -93.7755,
                        "links": null
                    },
                    "eventTimestamp": "2015-02-20T17: 14: 01.000Z",
                    "links": [
                        {
                            "rel": "machine",
                            "uri": "234474"
                        }
                    ]
                },
                {
                    "createTimestamp": "2015-02-27T19: 36: 55.000Z",
                    "machineState": {},
                    "origin": "JDLINK",
                    "point": {
                        "lat": 40.699608,
                        "lon": -89.610777,
                        "links": null
                    },
                    "eventTimestamp": "2015-02-27T19: 36: 55.000Z",
                    "links": [
                        {
                            "rel": "machine",
                            "uri": "187935"
                        }
                    ]
                }
            ]
        },
        "enginehours": {
            "links": [
                {
                    "rel": "self",
                    "uri": "187937"
                }
            ],
            "total": 3,
            "values": [
                {
                    "createTimestamp": "2015-02-28T23: 00: 55.000Z",
                    "machineState": {},
                    "origin": "JDLINK",
                    "point": {
                        "lat": 40.116743,
                        "lon": -88.224438,
                        "links": null
                    },
                    "eventTimestamp": "2015-02-28T23: 00: 55.000Z",
                    "links": [
                        {
                            "rel": "machine",
                            "uri": "187937"
                        }
                    ]
                },
                {
                    "createTimestamp": "2015-02-20T17: 14: 01.000Z",
                    "machineState": {},
                    "origin": "JDLINK",
                    "point": {
                        "lat": 41.639138,
                        "lon": -93.7755,
                        "links": null
                    },
                    "eventTimestamp": "2015-02-20T17: 14: 01.000Z",
                    "links": [
                        {
                            "rel": "machine",
                            "uri": "234474"
                        }
                    ]
                },
                {
                    "createTimestamp": "2015-02-27T19: 36: 55.000Z",
                    "machineState": {},
                    "origin": "JDLINK",
                    "point": {
                        "lat": 40.699608,
                        "lon": -89.610777,
                        "links": null
                    },
                    "eventTimestamp": "2015-02-27T19: 36: 55.000Z",
                    "links": [
                        {
                            "rel": "machine",
                            "uri": "187935"
                        }
                    ]
                }
            ]
        },
        "clients": {
            "links": [
                {
                    "rel": "self",
                    "uri": "https://api.deere.com/platform/clients"
                }
            ],
            "total": 1,
            "values": [
                {
                    "name": "Merriweather Farm",
                    "links": [
                        {
                            "rel": "self",
                            "uri": "https://api.deere.com/platform/clients/MjIzMDMxXzQ2MjM0ZjQzLTAwMDAtMTAwMC00MDE0LWUxZTFlMTExMjRlMA"
                        },
                        {
                            "rel": "fields",
                            "uri": "https://api.deere.com/platform/clients/MjIzMDMxXzQ2MjM0ZjQzLTAwMDAtMTAwMC00MDE0LWUxZTFlMTExMjRlMA/fields"
                        },
                        {
                            "rel": "farms",
                            "uri": "https://api.deere.com/platform/clients/MjIzMDMxXzQ2MjM0ZjQzLTAwMDAtMTAwMC00MDE0LWUxZTFlMTExMjRlMA/farms"
                        },
                        {
                            "rel": "owningOrganization",
                            "uri": "https://api.deere.com/platform/organizations/223031"
                        }
                    ],
                    "id": "MjIzMDMxXzQ2MjM0ZjQzLTAwMDAtMTAwMC00MDE0LWUxZTFlMTExMjRlMA"
                }
            ]
        },
        "hoursofoperation": [
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation"
                    },
                    {
                        "rel": "nextPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=10;count=10"
                    }
                ],
                "total": 60,
                "values": [
                    {
                        "startDate": "2015-02-27T21: 00: 00.000Z",
                        "endDate": "2015-02-27T21: 05: 27.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T20: 36: 04.000Z",
                        "endDate": "2015-02-27T21: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T20: 30: 00.000Z",
                        "endDate": "2015-02-27T20: 36: 04.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T20: 06: 04.000Z",
                        "endDate": "2015-02-27T20: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T20: 00: 00.000Z",
                        "endDate": "2015-02-27T20: 06: 04.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T19: 36: 04.000Z",
                        "endDate": "2015-02-27T20: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T19: 30: 50.000Z",
                        "endDate": "2015-02-27T19: 32: 22.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T18: 12: 48.000Z",
                        "endDate": "2015-02-27T18: 22: 04.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T18: 00: 00.000Z",
                        "endDate": "2015-02-27T18: 12: 47.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T17: 42: 47.000Z",
                        "endDate": "2015-02-27T18: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=10;count=10"
                    },
                    {
                        "rel": "nextPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=20;count=10"
                    },
                    {
                        "rel": "previousPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=0;count=10"
                    }
                ],
                "total": 60,
                "values": [
                    {
                        "startDate": "2015-02-27T17: 30: 00.000Z",
                        "endDate": "2015-02-27T17: 42: 47.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T17: 12: 47.000Z",
                        "endDate": "2015-02-27T17: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T17: 00: 00.000Z",
                        "endDate": "2015-02-27T17: 12: 47.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T16: 42: 47.000Z",
                        "endDate": "2015-02-27T17: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T16: 30: 00.000Z",
                        "endDate": "2015-02-27T16: 42: 47.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T16: 12: 47.000Z",
                        "endDate": "2015-02-27T16: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T16: 00: 00.000Z",
                        "endDate": "2015-02-27T16: 12: 47.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T15: 42: 47.000Z",
                        "endDate": "2015-02-27T16: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T15: 30: 00.000Z",
                        "endDate": "2015-02-27T15: 42: 47.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T15: 12: 47.000Z",
                        "endDate": "2015-02-27T15: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=20;count=10"
                    },
                    {
                        "rel": "nextPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=30;count=10"
                    },
                    {
                        "rel": "previousPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=10;count=10"
                    }
                ],
                "total": 60,
                "values": [
                    {
                        "startDate": "2015-02-20T17: 13: 43.000Z",
                        "endDate": "2015-02-20T17: 14: 01.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-20T17: 13: 35.000Z",
                        "endDate": "2015-02-20T17: 13: 43.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-20T17: 13: 34.000Z",
                        "endDate": "2015-02-20T17: 13: 35.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-20T17: 09: 51.000Z",
                        "endDate": "2015-02-20T17: 13: 31.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-20T16: 58: 17.000Z",
                        "endDate": "2015-02-20T17: 09: 51.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-20T16: 30: 31.000Z",
                        "endDate": "2015-02-20T16: 58: 17.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-20T16: 28: 31.000Z",
                        "endDate": "2015-02-20T16: 30: 31.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-20T16: 27: 44.000Z",
                        "endDate": "2015-02-20T16: 28: 31.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-20T06: 00: 00.000Z",
                        "endDate": "2015-02-20T16: 27: 14.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-19T06: 00: 00.000Z",
                        "endDate": "2015-02-20T06: 00: 00.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=30;count=10"
                    },
                    {
                        "rel": "nextPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=40;count=10"
                    },
                    {
                        "rel": "previousPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=20;count=10"
                    }
                ],
                "total": 60,
                "values": [
                    {
                        "startDate": "2015-02-18T06: 00: 00.000Z",
                        "endDate": "2015-02-19T06: 00: 00.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-17T06: 00: 00.000Z",
                        "endDate": "2015-02-18T06: 00: 00.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-16T06: 00: 00.000Z",
                        "endDate": "2015-02-17T06: 00: 00.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-15T06: 00: 00.000Z",
                        "endDate": "2015-02-16T06: 00: 00.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-14T06: 00: 00.000Z",
                        "endDate": "2015-02-15T06: 00: 00.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-13T06: 00: 00.000Z",
                        "endDate": "2015-02-14T06: 00: 00.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-12T17: 28: 01.000Z",
                        "endDate": "2015-02-13T06: 00: 00.000Z",
                        "engineState": 0,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-12T17: 20: 13.000Z",
                        "endDate": "2015-02-12T17: 28: 01.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-12T17: 18: 45.000Z",
                        "endDate": "2015-02-12T17: 20: 13.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-12T17: 17: 57.000Z",
                        "endDate": "2015-02-12T17: 18: 45.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "234474"
                            }
                        ]
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=40;count=10"
                    },
                    {
                        "rel": "nextPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=50;count=10"
                    },
                    {
                        "rel": "previousPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=30;count=10"
                    }
                ],
                "total": 60,
                "values": [
                    {
                        "startDate": "2015-02-27T19: 30: 00.000Z",
                        "endDate": "2015-02-27T19: 36: 55.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T19: 29: 25.000Z",
                        "endDate": "2015-02-27T19: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T18: 30: 00.000Z",
                        "endDate": "2015-02-27T18: 37: 23.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T18: 23: 05.000Z",
                        "endDate": "2015-02-27T18: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T18: 00: 00.000Z",
                        "endDate": "2015-02-27T18: 23: 05.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T17: 53: 05.000Z",
                        "endDate": "2015-02-27T18: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T17: 30: 00.000Z",
                        "endDate": "2015-02-27T17: 53: 05.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T17: 23: 05.000Z",
                        "endDate": "2015-02-27T17: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T17: 00: 00.000Z",
                        "endDate": "2015-02-27T17: 13: 29.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T16: 55: 48.000Z",
                        "endDate": "2015-02-27T17: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=50;count=10"
                    },
                    {
                        "rel": "previousPage",
                        "uri": "https: //api.deere.com/platform/hoursOfOperation;start=40;count=10"
                    }
                ],
                "total": 60,
                "values": [
                    {
                        "startDate": "2015-02-27T16: 30: 00.000Z",
                        "endDate": "2015-02-27T16: 55: 47.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T16: 25: 47.000Z",
                        "endDate": "2015-02-27T16: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T16: 00: 00.000Z",
                        "endDate": "2015-02-27T16: 25: 47.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T15: 55: 47.000Z",
                        "endDate": "2015-02-27T16: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T15: 30: 00.000Z",
                        "endDate": "2015-02-27T15: 48: 19.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T15: 21: 27.000Z",
                        "endDate": "2015-02-27T15: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T15: 00: 00.000Z",
                        "endDate": "2015-02-27T15: 21: 27.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T14: 51: 27.000Z",
                        "endDate": "2015-02-27T15: 00: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T14: 30: 00.000Z",
                        "endDate": "2015-02-27T14: 51: 27.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "startDate": "2015-02-27T14: 21: 27.000Z",
                        "endDate": "2015-02-27T14: 30: 00.000Z",
                        "engineState": 1,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    }
                ]
            }
        ],
        "distancetraveled": [
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https://api.deere.com/platform/machines/187937/distanceTraveled?lastKnown=false"
                    },
                    {
                        "rel": "nextPage",
                        "uri": "https://api.deere.com/platform/machines/187937/distanceTraveled;start=10;count=10?lastKnown=false"
                    }
                ],
                "total": 21,
                "values": [
                    {
                        "endDate": "2015-02-27T21:05:27.000Z",
                        "totalDistance": 406.79866178358384,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T20:36:04.000Z",
                        "totalDistance": 377.30838518770383,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T20:06:04.000Z",
                        "totalDistance": 341.74420552620694,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T19:32:22.000Z",
                        "totalDistance": 313.68059721625707,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T18:22:04.000Z",
                        "totalDistance": 313.5731007260002,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T18:12:47.000Z",
                        "totalDistance": 311.87613612638194,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T17:42:47.000Z",
                        "totalDistance": 276.5263290027042,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T17:12:47.000Z",
                        "totalDistance": 240.62598756979241,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T16:42:47.000Z",
                        "totalDistance": 205.16495582032928,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T16:12:47.000Z",
                        "totalDistance": 169.01047355969138,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https://api.deere.com/platform/machines/187937/distanceTraveled;start=10;count=10?lastKnown=false"
                    },
                    {
                        "rel": "nextPage",
                        "uri": "https://api.deere.com/platform/machines/187937/distanceTraveled;start=20;count=10?lastKnown=false"
                    },
                    {
                        "rel": "previousPage",
                        "uri": "https://api.deere.com/platform/machines/187937/distanceTraveled;start=0;count=10?lastKnown=false"
                    }
                ],
                "total": 21,
                "values": [
                    {
                        "endDate": "2015-02-27T15:42:47.000Z",
                        "totalDistance": 132.99704286972081,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T15:12:47.000Z",
                        "totalDistance": 95.5451375171399,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T14:42:47.000Z",
                        "totalDistance": 60.09591107038892,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T13:51:12.000Z",
                        "totalDistance": 43.82965664391951,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T13:37:35.000Z",
                        "totalDistance": 43.11880835464885,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T13:30:31.000Z",
                        "totalDistance": 43.07469185826771,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-26T22:16:57.000Z",
                        "totalDistance": 38.64555801781596,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-26T15:32:09.000Z",
                        "totalDistance": 33.28374618659031,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-25T23:55:53.000Z",
                        "totalDistance": 17.097648119541876,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-25T23:41:21.000Z",
                        "totalDistance": 13.731059695060843,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "https://api.deere.com/platform/machines/187937/distanceTraveled;start=20;count=10?lastKnown=false"
                    },
                    {
                        "rel": "previousPage",
                        "uri": "https://api.deere.com/platform/machines/187937/distanceTraveled;start=10;count=10?lastKnown=false"
                    }
                ],
                "total": 21,
                "values": [
                    {
                        "endDate": "2015-02-25T23:03:18.000Z",
                        "totalDistance": 1.3608029109997613,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187937"
                            }
                        ]
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "187935"
                    }
                ],
                "total": 10,
                "values": [
                    {
                        "endDate": "2015-02-27T19:36:55.000Z",
                        "totalDistance": 272.0835275965164,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T18:37:23.000Z",
                        "totalDistance": 271.5485278555635,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T18:23:05.000Z",
                        "totalDistance": 256.1447368394178,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T17:53:05.000Z",
                        "totalDistance": 217.03563440563113,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T17:13:29.000Z",
                        "totalDistance": 183.54683408160344,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T16:55:47.000Z",
                        "totalDistance": 164.07989664940746,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T16:25:47.000Z",
                        "totalDistance": 125.89850169840133,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T15:48:19.000Z",
                        "totalDistance": 94.45649801773642,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T15:21:27.000Z",
                        "totalDistance": 62.57704956144117,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    },
                    {
                        "endDate": "2015-02-27T14:51:27.000Z",
                        "totalDistance": 24.014132466396244,
                        "links": [
                            {
                                "rel": "machine",
                                "uri": "187935"
                            }
                        ]
                    }
                ]
            }
        ],
        "categories": [
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "187937"
                    }
                ],
                "total": 4,
                "values": [
                    {
                        "name": "CalAmp",
                        "links": [],
                        "id": "0",
                        "type": "Make"
                    },
                    {
                        "name": "UTGOBD",
                        "links": [],
                        "id": "0",
                        "type": "Model"
                    },
                    {
                        "name": "LMU3000",
                        "links": [],
                        "id": "0",
                        "type": "Type"
                    },
                    {
                        "links": [],
                        "type": "DMC"
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "234474"
                    }
                ],
                "total": 4,
                "values": [
                    {
                        "name": "JOHN DEERE",
                        "links": [],
                        "id": "1",
                        "type": "Make"
                    },
                    {
                        "name": "8430T",
                        "links": [],
                        "id": "7517",
                        "type": "Model"
                    },
                    {
                        "name": "Tractor",
                        "links": [],
                        "id": "1012",
                        "type": "Type"
                    },
                    {
                        "name": "RW24702",
                        "links": [],
                        "type": "DMC"
                    }
                ]
            },
            {
                "links": [
                    {
                        "rel": "self",
                        "uri": "187935"
                    }
                ],
                "total": 4,
                "values": [
                    {
                        "name": "CalAmp",
                        "links": [],
                        "id": "0",
                        "type": "Make"
                    },
                    {
                        "name": "UTGOBD",
                        "links": [],
                        "id": "0",
                        "type": "Model"
                    },
                    {
                        "name": "LMU3000",
                        "links": [],
                        "id": "0",
                        "type": "Type"
                    },
                    {
                        "links": [],
                        "type": "DMC"
                    }
                ]
            }
        ]
    }
}';

echo $json;

?>