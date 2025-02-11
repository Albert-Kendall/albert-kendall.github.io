export default function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy({
    'css': 'css',
    'img': 'img',
    'js': 'js',
  });
  eleventyConfig.addGlobalData('site_title', 'Albert & Kendall');
  eleventyConfig.setIncludesDirectory('_includes');
  eleventyConfig.setLayoutsDirectory('_layouts');
  eleventyConfig.addGlobalData('layout', 'default.liquid');
};
