/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        fontFamily: {
            sans: ["Figtree", "sans-serif"],
        },
        extend: {
            colors: {
                blue: {
                    50: "#f0f5fe",
                    100: "#dce8fd",
                    200: "#c1d7fc",
                    300: "#97bff9",
                    400: "#659df5",
                    500: "#4179f0",
                    600: "#2c59e4",
                    700: "#2447d6",
                    800: "#233aaa",
                    900: "#223586",
                    950: "#192252",
                },
                yellow: {
                    50: "#fffdea",
                    100: "#fff7c5",
                    200: "#fff085",
                    300: "#ffe146",
                    400: "#ffcf1b",
                    500: "#fcac00",
                    600: "#e28400",
                    700: "#bb5c02",
                    800: "#984708",
                    900: "#7c3a0b",
                    950: "#481d00",
                },
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
