var data = [
          {
            type: "indicator",
            mode: "number+gauge",
            value: 27,
            domain: { x: [0.11, 1], y: [0.08, 0.25] },
            title: { text: "Tegangan <br><span><sub>Volt</sub></span>" },
            gauge: {
              shape: "bullet",
              axis: { range: [0, 40] },
              bar: { color: "blue" },
              steps: [{ range: [0, 40], color: "white" }],
            },
          },
          {
            type: "indicator",
            mode: "number+gauge",
            value: 9,
            domain: { x: [0.11, 1], y: [0.4, 0.6] },
            title: { text: "Arus <br><span><sub>Current</sub></span>" },
            gauge: {
              shape: "bullet",
              axis: { range: [0, 40] },
              bar: { color: "blue" },
              steps: [{ range: [0, 40], color: "white" }],
            },
          },
        ];

        var layout = {
          width: 1300,
          height: 270,
          margin: { t: 0, r: 0, l: 0, b: 0 },
          paper_bgcolor: "transparent",
          font: { color: "black", family: "Georgia" },
        };
        Plotly.newPlot("stats", data, layout);