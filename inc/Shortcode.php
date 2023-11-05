<?php 

namespace WAC\Inc;

class Shortcode{

    function __construct(){

        add_shortcode( 'wac_composer', [$this, 'wac_shortcode'] );
    }

    /**
     * Main Shortcode
     */
    function wac_shortcode() {
        ?>
        <div class="html">
            <div class="body">
                <div width="400" height="400" id="inspector">
                    <h1>Web Audio Composer</h1>
                    <div id="mediaParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/MediaElementAudioSourceNode">MediaElementAudioSourceNode</a></h2>
                        Music: <a href="http://www.xlr8r.com/mp3/2014/09/mind-wave">"Mind wave" Rhythm Operator</a>
                    </div>
                    <div id="microphoneParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/MediaStreamAudioSourceNode">MediaStreamAudioSourceNode</a></h2>
                    </div>
                    <div id="oscillatorParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/OscillatorNode">OscillatorNode</a></h2>
                        <h3>type</h3>
                        <label><input type="radio" name="type" value="sine"></input> sine</label><br>
                        <label><input type="radio" name="type" value="square"></input> square</label><br>
                        <label><input type="radio" name="type" value="sawtooth"></input> sawtooth</label><br>
                        <label><input type="radio" name="type" value="triangle"></input> triangle</label><br>
                        <h3>frequency</h3>
                        <input type="range" name="frequency"></input>
                        <label name="frequency"></label> Hz
                        <h3>detune</h3>
                        <input type="range" name="detune"></input>
                        <label name="detune"></label> cents
                    </div>
                    <div id="bufferParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/AudioBufferSourceNode">AudioBufferSourceNode</a></h2>
                        <h3>playbackRate</h3>
                        <input type="range" name="playbackRate"></input>
                        x<label name="playbackRate"></label>
                    </div>
                    <div id="gainParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/GainNode">GainNode</a></h2>
                        <h3>gain</h3>
                        <input type="range" name="gain"></input>
                    </div>
                    <div id="splitParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/ChannelSplitterNode">ChannelSplitterNode</a></h2>
                    </div>
                    <div id="mergeParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/ChannelMergerNode">ChannelMergerNode</a></h2>
                    </div>
                    <div id="biquadParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/BiquadFilterNode">BiquadFilterNode</a></h2>
                        <h3>type</h3>
                        <label><input type="radio" name="type" value="lowpass"></input> lowpass</label><br>
                        <label><input type="radio" name="type" value="highpass"></input> highpass</label><br>
                        <label><input type="radio" name="type" value="bandpass"></input> bandpass</label><br>
                        <label><input type="radio" name="type" value="lowshelf"></input> lowshelf</label><br>
                        <label><input type="radio" name="type" value="highshelf"></input> highshelf</label><br>
                        <label><input type="radio" name="type" value="peaking"></input> peaking</label><br>
                        <label><input type="radio" name="type" value="notch"></input> notch</label><br>
                        <label><input type="radio" name="type" value="allpass"></input> allpass</label><br>
                        <h3>frequency</h3>
                        <input type="range" name="frequency"></input>
                        <label name="frequency"></label> Hz
                        <h3>detune</h3>
                        <input type="range" name="detune"></input>
                        <label name="detune"></label> cents
                        <h3>Q</h3>
                        <input type="range" name="Q"></input>
                        <h3>gain</h3>
                        <input type="range" name="gain"></input>
                    </div>
                    <div id="convolveParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/ConvolverNode">ConvolverNode</a></h2>
                        <h3>normalize</h3>
                        <label><input type="radio" name="normalize" value="true"></input> On</label>
                        <label><input type="radio" name="normalize" value="false"></input> Off</label><br>
                    </div>
                    <div id="delayParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/DelayNode">DelayNode</a></h2>
                        <h3>delay</h3>
                        <input type="range" name="delayTime"></input>
                        <label name="delayTime"></label> sec
                    </div>
                    <div id="compressParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/DynamicsCompressorNode">DynamicsCompressorNode</a></h2>
                        <h3>threshold</h3>
                        <input type="range" name="threshold"></input>
                        <label name="threshold"></label> dB
                        <h3>knee</h3>
                        <input type="range" name="knee"></input>
                        <label name="knee"></label> dB
                        <h3>ratio</h3>
                        <input type="range" name="ratio"></input>
                        <label name="ratio"></label> dB
                        <h3>reduction</h3>
                        <input type="range" name="reduction"></input>
                        <h3>attack</h3>
                        <input type="range" name="attack"></input>
                        <label name="attack"></label> sec
                        <h3>release</h3>
                        <input type="range" name="release"></input>
                        <label name="release"></label> sec
                    </div>
                    <div id="shaperParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/WaveShaperNode">WaveShaperNode</a></h2>
                        <h3>oversample</h3>
                        <label><input type="radio" name="oversample" value="none"></input> none</label><br>
                        <label><input type="radio" name="oversample" value="2x"></input> 4x</label><br>
                        <label><input type="radio" name="oversample" value="4x"></input> 2x</label><br>
                    </div>
                    <div id="analyserParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/AnalyserNode">AnalyserNode</a></h2>
                    </div>
                    <div id="destParams" class="paramPane">
                        <h2><a href="https://developer.mozilla.org/en-US/docs/Web/API/AudioDestinationNode">AudioDestinationNode</a></h2>
                        <h3>maxChannelCount</h3>
                        <label name="maxChannelCount"></label>
                    </div>

                    <footer>
                        This app only works for Chrome and Firefox.<br>
                        <address>
                            <a href="http://tai2.net">Taiju Muto</a> <a href="https://github.com/tai2/webaudiocomposer">GitHub</a>
                        </address>
                    </footer>
                </div>
                <div id="workspace">
                    <canvas id="mainStage"></canvas>
                </div>
                <audio id="music" src="http://localhost:10024/wp-content/uploads/2023/11/music.mp3" loop></audio>
            </div>
        </div>
       <?php 
    }
}