import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import aspectRatio from "@tailwindcss/aspect-ratio";
import lineClamp from "@tailwindcss/line-clamp";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // 🎨 Custom warna tema POS Cafe
                cafe: {
                    light: "#FCE7D8",
                    DEFAULT: "#D97706", // coklat keemasan
                    dark: "#92400E",
                },
                coffee: "#4B2E05",
                milk: "#F3E8E2",
                cream: "#FEEBC8",
            },
            boxShadow: {
                soft: "0 4px 6px rgba(0,0,0,0.1)",
                card: "0 2px 10px rgba(0,0,0,0.05)",
            },
        },
    },

    plugins: [forms, typography, aspectRatio, lineClamp],
};
